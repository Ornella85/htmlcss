Le Flux:

Le flux (flow) regroupe la plupart des éléments courants, c'est-à-dire les autres sous-modèles cités ci-après, ainsi que le contenu texte simple.

Element de type Block et Inline :
https://www.alsacreations.com/tuto/lire/530-La-structure-des-balises-bloc-et-en-ligne.html
http://fr.learnlayout.com/toc.html


Block :Les éléments de rendu CSS block se placent toujours l'un en dessous de l'autre par défaut (comme un retour chariot). Par exemple: une suite de paragraphes (balise <p>). Par ailleurs, un élément "bloc" occupe automatiquement, par défaut, toute la largeur disponible dans son conteneur et peut être dimensionné à l'aide des propriétés telles que width, height, min-width, ou min-height,...

Inline :Les éléments de rendu inline se placent toujours l'un à côté de l'autre afin de rester dans le texte (par exemple la balise <strong>).
Par défaut, il n'est pas prévu qu'ils puissent se positionner sur la page (même si cela est possible), ni de leur donner des dimensions (hauteur, largeur, profondeur) : leur taille va être déterminée par le texte ou l'élément qu'ils contiennent. Certaines propriétés de marges peuvent être appliquées aux éléments, comme les marges latérales.

Inline-block:Les éléments de rendu inline-block conservent les mêmes caractéristiques que les "inline", mais peuvent être dimensionnés, par exemple la balise <input>.


La propriété FLOAT indique qu'un élément doit être retiré du flux normal et doit être placé sur le côté droit ou sur le côté gauche de son conteneur. Le texte et les autres éléments en ligne (inline) entoureront alors l'élément flottant. L'élément est retiré du flux normal de la page mais s'inscrit toujours dans le flux (contrairement au positionnement absolu).