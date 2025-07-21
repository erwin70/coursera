create table posts( /*Hier maak ik een tabel aan met de naam posts */
	ID int(3) /*Met maximum 3 (dus tot 999) cijfers */ 		not null /* De waarde mag niet leeg zijn*/ 	PRIMARY key /* Het kan geen zelfde waarde bevatten*/	AUTO_INCREMENT, /* En wordt automatisch ingevuld*/
	subject 	varchar	(128) /* Mag maximum 128 cijfers en letter bevatten*/	not null,
	content 	varchar	(1000) 	not null,
	date datetime not null /* Achter de laatste coderegel suiten we niet af met , */
                   );