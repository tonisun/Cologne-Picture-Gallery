CREATE TABLE "images" (
	"id" SERIAL PRIMARY KEY,
	"filename"	varchar(100) NOT NULL,
	"title"	varchar(1000) NOT NULL,
	"description"	text NOT NULL
);

INSERT INTO images (filename,title,description) VALUES 
('FPR2oOmWQAIatiA.jpg','Carlito','Wandern macht Kerle stark!'),
 ('FUlzSIDWAAIZx9z.jpg','Carlito','Wandern macht Kerle stark!'),
 ('FVUoSfLXoAMd3hd.jpg','Carlito','Wandern macht Kerle stark!'),
 ('FVzIye3VEAIhvZN.jpg','Carlito','Wandern macht Kerle stark!'),
 ('FW0hrUtXgAI_8BH.jpg','Carlito','Wandern macht Kerle stark!'),
 ('FW1QxcBX0AA14hl.jpg','Carlito','Wandern macht Kerle stark!'),
 ('FW1Ugn8UEAAx2Gh.jpg','Carlito','Wandern macht Kerle stark!'),
 ('FW1vIRnWQAEJleV.jpg','Carlito','Wandern macht Kerle stark!'),
 ('FW1yxsWVQAAlxhL.jpg','Carlito','Wandern macht Kerle stark!'),
 ('FW_--SMWAAU6SWC.jpg','Carlito','Wandern macht Kerle stark!'),
 ('FW_AQhDXEAAsWeF.jpg','Carlito','Wandern macht Kerle stark!'),
 ('FW_yvqsWYAIF0RI.jpg','Carlito','Wandern macht Kerle stark!');