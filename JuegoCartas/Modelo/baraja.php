<?php

/**
 * Objeto Baraja. 
 * 
 * Constructor por defecto con el array de los valores necesarios y los accesores get y set.
 * 
 */

class Baraja {
    
    private $baraja;
    

    public function nuevaBaraja (){
        $this->baraja = array(
            "As de Bastos" => 1.0, 
            "As de Copas" => 1.0,
            "As de Espadas" => 1.0,
            "As de Oros" => 1.0,
            "Dos de Bastos" => 2.0, 
            "Dos de Copas" => 2.0,    
            "Dos de Espadas" => 2.0,     
            "Dos de Oros" => 2.0,
            "Tres de Bastos" => 3.0, 
            "Tres de Copas" => 3.0,   
            "Tres de Espadas" => 3.0,    
            "Tres de Oros" => 3.0,
            "Cuatro de Bastos" => 4.0,  
            "Cuatro de Copas" => 4.0, 
            "Cuatro de Espadas" => 4.0,  
            "Cuatro de Oros" => 4.0,
            "Cinco de Bastos" => 5.0,   
            "Cinco de Copas" => 5.0,  
            "Cinco de Espadas" => 5.0,   
            "Cinco de Oros" => 5.0,
            "Seis de Bastos" => 6.0,    
            "Seis de Copas" => 6.0,   
            "Seis de Espadas" => 6.0,    
            "Seis de Oros" => 6.0,
            "Siete de Bastos" => 7.0,   
            "Siete de Copas" => 7.0,  
            "Siete de Espadas" => 7.0,   
            "Siete de Oros" => 7.0,
            "Sota de Bastos" => 0.5,    
            "Sota de Copas" => 0.5,   
            "Sota de Espadas" => 0.5,    
            "Sota de Oros" => 0.5,
            "Caballo de Bastos" => 0.5, 
            "Caballo de Copas" => 0.5,
            "Caballo de Espadas" => 0.5, 
            "Caballo de Oros" => 0.5,
            "Rey de Bastos" => 0.5,     
            "Rey de Copas" => 0.5,    
            "Rey de Espadas" => 0.5,     
            "Rey de Oros" => 0.5
        );
        return $this->baraja ;
    }
    
    
    /**
     * @return multitype:number
     */
    public function getBaraja()
    {
        return $this->baraja;
    }
    
    /**
     * @param multitype:number  $baraja
     */
    public function setBaraja($baraja)
    {
        $this->baraja = $baraja;
    }
    
}

?>