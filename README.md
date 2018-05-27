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
eklendikten sonra modül kullanıma hazır olacaktır.
