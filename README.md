TAG MODÜLÜ

Tag modülü admin ve kullanıcı olmak üzere 2 panelden oluşur.Kullanıcı paneli adminin girdiği tüm postların kullanıcı tarafından okunabilmesine,mevcut etiketlerin aratılabilmesine ve aynı zamanda etiketlerin kategorilerine göre de sınıflandırılmasına olanak sağlar.
Admin panelinde ise kullanıcı post oluşturabilmekte ve bunları yönetebilmektedir.

Kullanımı

Ana proje klasöründeki "composer.json" dosyasındaki "repositories" kısmına şu kod eklenmelidir:
```bash
{
  "type":"vcs",
  "url":"https://github.com/asliyigiit/tag.git"
}
```
require kısmına ise:
```bash
{
  "projeAdi/tag":"dev-master"
}
```
portal/backend/config/main.php dosyasinda
```bash
    'modules' => [
    ....
'tag' => [

    'class' => 'kouosl\tag\Module',

],
```
Komut satırında portal dizinine girerek composer update komutu çalıştırılmalıdır.Böylece modül kurulmuş olacaktır.
Daha sonra migration dosyalarını kullanabilmek için;
```bash
php yii migrate --migrationPath=@vendor/kouosl/tag/migrations --interactive=0 
```
komutu çalıştırılmalıdır.
