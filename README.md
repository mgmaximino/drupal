# drupal

-lors de l'installation de components, il faut une version >^3.0 pour Radix

-bien faire attention au chemin du include dans la view, l'erreur etait qu'il manquait le .html. 

-vérifier la bonne structure du yaml

-j'ai du modifier également le proxy.js qui se trouve dans le theme/custom/nsi_theme/config afin de mettre la bonne url, dans ce cas ci : const proxy = 'http://localhost:80';

-le .htaccess a du être modifié comme ceci :
  RewriteEngine on
  RewriteBase /php/recommended-project/web/ (c'est simplement ce qui se trouve apres le localhost)
  
-encore erreur avec la 404 ainsi qu'avec le formatter qui n'affiche pas mon CardinalDirectionFormatter
