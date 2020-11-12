<?php 

SELECT user, password, email, pasadmin, status, area, puesto, fechaingreso FROM login
INNER JOIN monitor
WHERE login.id_dato = monitor.id

 ?>