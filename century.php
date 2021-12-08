<?php 

// função para retornar o século de acordo com o ano

function SeculoAno($ano){ 
    
    return ceil($ano / 100); 

} 

echo "Ano: 1905 século: " . SeculoAno(1905) . "<br/>";
echo "Ano: 1700 século: " . SeculoAno(1700) . "<br/>";