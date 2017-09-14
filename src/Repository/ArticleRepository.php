<?php
namespace Repository;

use Entity\Article;
use Entity\Category;
use Entity\User;

class ArticleRepository extends RepositoryAbstract
{
    /**
     * 
     * @return array
     */
    public function findAll()
    {
        $query = <<<SQL
SELECT 
    a.*, 
    c.name AS category_name,
    u.lastname,
    u.firstname
FROM article a
JOIN category c ON a.category_id = c.id
JOIN user u ON a.author_id = u.id
ORDER BY a.id DESC
SQL;
        
        $dbArticles = $this->db->fetchAll($query);
        $articles = [];
        
        foreach ($dbArticles as $dbArticle) {
            $articles[] = $this->buildEntity($dbArticle);
        }
        
        return $articles;
    }
    
    /**
     * 
     * @return array
     */
    public function findByCategory(Category $category)
    {
        $query = <<<SQL
SELECT 
    a.*, 
    c.name AS category_name,
    u.lastname,
    u.firstname
FROM article a
JOIN category c ON a.category_id = c.id
JOIN user u ON a.author_id = u.id
WHERE a.category_id = :category_id
ORDER BY a.id DESC
SQL;
        
        $dbArticles = $this->db->fetchAll(
            $query,
            [
                ':category_id' => $category->getId()
            ]
        );
        $articles = [];
        
        foreach ($dbArticles as $dbArticle) {
            $articles[] = $this->buildEntity($dbArticle);
        }
        
        return $articles;
    }
    
    /**
     * 
     * @param int $id
     * @return Article|null
     */
    public function find($id)
    {
        $query = <<<SQL
SELECT
    a.*, 
    c.name AS category_name,
    u.lastname,
    u.firstname
FROM article a
JOIN category c ON a.category_id = c.id
JOIN user u ON a.author_id = u.id
WHERE a.id = :id
SQL;
        
        $dbArticle = $this->db->fetchAssoc(
            $query,
            [
                ':id' => $id
            ]
        );
        
        if (!empty($dbArticle)) {
            return $this->buildEntity($dbArticle);
        }
    }

    /**
     * 
     * @param Article $article
     */
    public function save(Article $article)
    {
        $data = [
            'title' => $article->getTitle(),
            'content' => $article->getContent(),
            'header' => $article->getHeader(),
            'category_id' => $article->getCategoryId(),
            'author_id' => $article->getAuthorId()
        ];
        
        if ($article->getId()) { // update
            $this->db->update(
                'article',
                $data,
                [
                    'id' => $article->getId()
                ]
            );
        } else { //insert
            $this->db->insert('article', $data);
            $article->setId($this->db->lastInsertId());
        }
    }
    
    /**
     * 
     * @param Article $article
     */
    public function delete(Article $article) 
    {
        $this->db->delete('article', ['id' => $article->getId()]);
    }
    
    /**
     * 
     * @param array $data
     * @return Article
     */
    private function buildEntity(array $data)
    {
        $category = new Category();
        
        $category
            ->setId($data['category_id'])
            ->setName($data['category_name'])
        ;
        
        $author = new User();
        
        $author
            ->setId($data['author_id'])
            ->setLastname($data['lastname'])
            ->setFirstname($data['firstname'])
        ;
        
        $article = new Article();
        
        $article
            ->setId($data['id'])
            ->setTitle($data['title'])
            ->setContent($data['content'])
            ->setHeader($data['header'])
            ->setCategory($category)
            ->setAuthor($author)
        ;
        
        return $article;
    }
}
