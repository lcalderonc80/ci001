

select @@version as 'sql server version';
 go
 CREATE FUNCTION  mitest(
    @quantity INT,
    @list_price DEC(10,2),
    @discount DEC(4,2)
)
RETURNS DEC(10,2)
AS 
BEGIN
    RETURN @quantity * @list_price * (1 - @discount);
END; 
go
  
 SELECT dbo.mitest(10,100,0.1) net_sale;
 
 go
CREATE TABLE roles
(
id int IDENTITY(1,1) PRIMARY KEY,
nombre varchar(255) 
);
go
CREATE TABLE usuarios
(
id int IDENTITY(1,1) PRIMARY KEY,
nombre varchar(255),
usuario varchar(255),
 
 rol_id int FOREIGN KEY REFERENCES roles (id)
);


go
INSERT INTO roles (nombre)
VALUES ('admin');
go
INSERT INTO roles (nombre)
VALUES ('editor');
go
INSERT INTO roles (nombre)
VALUES ('supervisor');
go
INSERT INTO roles (nombre)
VALUES ('super');
go
INSERT INTO usuarios (nombre, usuario, rol_id)
VALUES ('Luis', 'luis', 1);
go
INSERT INTO usuarios (nombre, usuario, rol_id)
VALUES ('Luis', 'test', 2);
go
INSERT INTO usuarios (nombre, usuario, rol_id)
VALUES ('Luis', 'test', null);
go
ALTER TABLE roles
ADD fechadenacimiento date;
/*ALTER COLUMN fechadenacimiento year
DROP COLUMN fechadenacimiento*/
go
select * from roles;
go
select * from usuarios right  join roles on usuarios.rol_id = roles.id;
go
/* limit*/
SELECT TOP 2 * FROM dbo.roles ;
 
 go
SELECT  *
FROM     roles
ORDER BY id asc
OFFSET  1 ROWS 
FETCH NEXT 2 ROWS ONLY ;
 
