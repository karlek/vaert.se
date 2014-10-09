glove
-------

Github genererar avatarbilder till nya användare. Dessa avatarer är 25st
fyrkanter i en 5x5 matris. Jag vill då hitta den användaren som har fått den
användare vars avatar råkat bli ett hjärta. (Gotta love slump). En bonus vore
att lista ut hur de genereras och på så sätt kunna skapa en användare som kommer
få en viss avatar.

*Avataranalys*

* Alla avatarer har en 35 pixel bred ram.
* En delruta är 70x70 pixlar.
* Hela relevanta bilden är 350x350.
* Totalt 25 rutor.

*Skrapning*

URL: https://avatars3.githubusercontent.com/u/{id}

* Är bildstorleken 420x420?
* Är första pixeln (@1x1) #f0f0f0.

*Möjliga versioner*

Version 1:

<pre>
 @ @
@@@@@
@@@@@
 @@@
  @
</pre>

Version 2:

<pre>
 @ @
@ @ @
@   @
 @ @
  @
</pre>


tolka
------

På samma sätt som ljud kan visualiseras borde även kod kunna representeras i en
bild. Alla som kodar har en unik stil och att skriva snygg kod eller en bra
kommentar är att skapa ett konstverk. Det var så jag fick idén att faktiskt
göra kod till ett konstverk. Jag vill skriva ett program som analyserar en
kodfil och analyserar vilka sorters satser som används och visualisera detta. En
preliminär lista på intressanta satsdelar som kan visualiseras:

* konditional-satser
* funktions anrop
* slingor
* datatyper
* kommentarer

Än så länge finns det inga konkreta tankar på hur visualiseringen ska
representeras. En tanke är att representera kod-flödet som en debugger hade
gjort fast med färger istället för assembly-instruktioner. 

Ett problem är att det som är bra kod är väldigt svårt för en dator att tolka
eftersom det handlar om lättläshet, välformulerade kommentarer samt skön API.
Det är egentligen det här som är målet att visualisera. Tanken är väl att kunna
visa snygg kod för personer som inte förstår programmering för att lättare kunna
visa vad man sysslat med på sin fritid.

wat
----

En app vars tanke är att kunna fotografera en streckkod och kunna förklara vad
alla ämnen i produkten har för nytta i produkten. Appen ska drivas av användarna
där de kan skriva lägga till och förbättra förklaringar av ett ämne. Hela syftet
med appen är att uppmuntra nyfikenhet och lärande.

Information och relevans om ämnena kan vara i flera nivåer och kategorier,
lekmannatermer, biologi, ekologi, framställning etc.

Vissa ämnen går inte av ordet att lista ut vad de har för påverkan på produkten,
[e][e-ämnen] är ofta väldigt svåra att veta deras relevans i produkten. Det skulle
även kunna minska rädslan för vanliga e-ämnen.

[e][http://sv.wikipedia.org/wiki/Lista_%C3%B6ver_E-nummer]
