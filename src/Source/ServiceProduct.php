<?php
namespace Source;

class ServiceProduct implements IServiceProduct
{
    private $db;
    private $product;

    public function __construct(IConn $db, IProduct $product)
    {
        $this->db = $db->connect();
        $this->product = $product;
    }

    public function list()
    {
        $query = "select * from products";

        $smtp = $this->db->prepare($query);
        $smtp->execute();

        return $smtp->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
