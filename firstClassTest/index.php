<?php declare(strict_types=1);
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', '1');

class Product
{
    /**
     * Properties
     */

    /**
     * @var string
     */
    private $articleNumber;

    /**
     * @var string
     */
    private $name; // property

    /**
     * @var string
     */
    private $supplier = 'Mein Standard Hersteller';

    /**
     * Der Konstruktor wird immer EINMAL bei der Inititalisierung
     * ausgeführt (new Product())
     */
    public function __construct($articleNumber)
    {
        $this->articleNumber = $articleNumber;
    }

    public function setName($nameParam) // method
    {
        /**
         * 1. $nameParam ist "aspein"
         * 2. Methode cleanString wird aufgerufen mit Parameter $string = "aspein"
         * 3. "Aspein" wird von cleanString zurückgegeben
         * 4. "Aspein" wird $this->name, also dem property $name zugewiesen
         */
        $this->name = $this->cleanString($nameParam);
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getArticleNumber(): string
    {
        return $this->articleNumber;
    }

    /**
     * @param string $articleNumber
     */
    public function setArticleNumber(string $articleNumber): void
    {
        $this->articleNumber = $articleNumber;
    }

    /**
     * @return string
     */
    public function getSupplier(): string
    {
        return $this->supplier;
    }

    /**
     * @param string $supplier
     */
    public function setSupplier(string $supplier): void
    {
        $this->supplier = $supplier;
    }

    private function cleanString($string)
    {
        return ucfirst($string);
    }
}

$myArticleNumber = 'AN-20454';

$product01 = new Product($myArticleNumber);
$product02 = new Product('AN-20455');

$product01->setName('aspein');
$product01->setSupplier('BAYER');
echo $product01->getName();

/**
var_dump($product01);
echo "<br>";
var_dump($product02);

AUSGABE:
/home/dreischild/shopware-dev/public/firstClassTest/index.php:98:
object(Product)[1]
private 'articleNumber' => string 'AN-20454' (length=8)
private 'name' => string 'Aspein' (length=6)
private 'supplier' => string 'BAYER' (length=5)

/home/dreischild/shopware-dev/public/firstClassTest/index.php:100:
object(Product)[2]
private 'articleNumber' => string 'AN-20455' (length=8)
private 'name' => null
private 'supplier' => string 'Mein Standard Hersteller' (length=24)
 * */

$products = [$product01, $product02];
foreach($products as $product) {
    echo sprintf(
        'Artikelnummer: %s<br>',
        $product->getArticleNumber()
    );
}
