
## 🛠️ 1- Como fazer funcionar a API em Laravel:
###  É necessário ter o composer(https://getcomposer.org/) instalado na máquina e o Docker
 * Navegar até a pasta do projeto (api)
 * Copiar o arquivo **.env.example** para o **.env** no mesmo caminho   
 * Abrir o terminal e:
    * Instalar as dependências: **composer require laravel/sail --dev**
    * Criar o alias para o sail: **alias sail='bash vendor/bin/sail'**
    * Subir os containers: **sail up -d**
    * Rodar as migrations: **sail artisan migrate**
 * O sistema estará rodando no endereço: **http://localhost/perfil**