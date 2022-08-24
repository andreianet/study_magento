## Sobre Plugin no Magento 2

Os Plugins são interceptores, usa o DI, que mudam o comportamento,
altera algo e até o resultado.

Plugin's:
* <strong>Before -></strong> atacao o argumento do método,
interceptando um determinado método e altera o comportamento do argumento);
* <strong>After -></strong>  ataca o result do método, alterando o resultado;
* <strong>Around -></strong> ataca antes e depois do 'proceed', mas é complexo, deve saber usá-lo, pois
intercepta um determinado método, altera o comportamento e o resultado em si. Deve
analisar bem, antes de implementá-lo.

O importante saber é a ordem de execução do Plugin,
temos uma tag chamada "sortOrder"

[Link para mais detalhes, sobre Plugin]: https://developer.adobe.com/commerce/php/development/components/plugins/)
