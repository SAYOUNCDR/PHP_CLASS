<?php
// Inheritance in PHP

//Parent
class DNASequence
{
    protected $sequence; //DNA sequence is protected so child can acess it 
    public function __construct($sequence)
    {
        if (!preg_match('/^[ATGC]+$/i', $sequence)) {
            throw new Exception("Invalid DNA Sequence, Use Only A, T, G, C");
        }
        $this->sequence = strtoupper($sequence);
    }

    public function getSequence()
    {
        return $this->sequence;
    }

    public function getGCCContent()
    {
        $gcCount = substr_count($this->sequence, 'G') + substr_count($this->sequence, 'C');
        return round(($gcCount / strlen($this->sequence)) * 100, 2);
    }
}

class Gene extends DNASequence
{
    private $geneName;
    private $function;

    public function __construct($sequence, $geneName, $function)
    {
        parent::__construct($sequence); // Call the parent constructor
        $this->geneName = $geneName;
        $this->function = $function;
    }
    public function displayGeneInfo()
    {
        echo "Gene Name: " . $this->geneName . "\n";
        echo "Function: " . $this->function . "\n";
        echo "DNA Sequence: " . $this->sequence . "\n";
        echo "GC Content: " . $this->getGCCContent() . "%\n";
    }
}

// Example usage
try {
    $gene1 = new Gene("ATGCGTACGTAG", "BRCA1", "Tumor Suppressor");
    $gene2 = new Gene("ATGCGTACGTAG", "TP53", "Tumor Suppressor");

    $gene1->displayGeneInfo();
    echo "\n";
    $gene2->displayGeneInfo();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
