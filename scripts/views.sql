-- join users
select A.id_user,A.img,A.first_name,A.last_name,B.role,C.country,D.state
from users as A
inner join roles as B
on A.id_role = B.id_role
inner join countrys as C
on A.id_country = C.id_country
inner join states as D
on A.id_state = D.id_state;


