## Exemplo de  Interface em Magento 2

As interfaces no Magento são trabalhadas, para facilitar
e preservar a integridade dos dados. Elas são trabalhadas 
através do arquivo di.xml, onde damos preferências as
interfaces e suas classes concretas que gera a regra de negócio.

Detalhe da estrutura criada de exemplo:
* Criamos a interface(Api);
* A classe concreta para regra de negócio(Model);
* Declaramos as preferências(di.xml);
* Cria o Controller/Page/Index(verificar route);

Por fim, essa é lógica de tranalhar com interfaces, ou seja,
se pecisar mudar a regra de negócio etc, muda/ou cria nas classes concretas e 
altera definitivamente no arquivo di.xml.
