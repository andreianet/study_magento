# Create Menu Admin in Magento 2

Na criação de um menu no Magento, adicionamos no 
arquivo menu.xml. A estrutura será dentro do arquivo
etc/adminhtml/menu.xml.

Alguns atributos e informações importantes,como:

* id => atributos de identificador
{Vendor_ModuleName}::{menu_description};
* title => é um título que mostrará na barra menu;
* module => será atribuido ao module que pertence;
* sortOrder => irá definir a posição do menu, sendo assim,
o valor mais baixo será exibido na parte superior do menu.
* parent => é como fosse uma herança, ou seja, o id daquele
atributo é de outro menu;
* action => define uma url para o link de menu, seguindo
um formato como: {router_name}{controller_folder}{action_name};
* o atributo define uma regra do ACL, para que o usuário admin deve ter
para acessar este menu;

<img src="app/code/AndreiaCardoso/ExampleMenu/view/adminhtml/web/images/menu.png />

