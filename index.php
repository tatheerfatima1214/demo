<?php
$_STUDENT_RECORD  = array(
    array(
    'name' => 'alex',
    'email' => 'alex@yopmail.com',
    'grade' => 'A'
),
array(
    'name' => 'john',
    'email' => 'john@yopmail.com',
    'grade' => 'B'
),
array(
    'name' => 'Sam',
    'email' => 'Sam@yopmail.com',
    'grade' => 'A+'
),
array(
    'name' => 'Alice',
    'email' => 'Alice@yopmail.com',
    'grade' => 'B'
),
);
?>
<!DOCTYPE html>
<body>

<table border="1" width="900">
<tr>
<th>Name</th>
<th>Email</th>
<th>Grade</th>
</tr>
<tr>
<td><?php echo $_STUDENT_RECORD [0]['name'];?></td>
<td><?php echo $_STUDENT_RECORD [0]['email'];?></td>
<td><?php echo $_STUDENT_RECORD [0]['grade'];?></td>
</tr>
<tr>
<td><?php echo $_STUDENT_RECORD [1]['name'];?></td>
<td><?php echo $_STUDENT_RECORD [1]['email'];?></td>
<td><?php echo $_STUDENT_RECORD [1]['grade'];?></td>
</tr>
<tr>
<td><?php echo $_STUDENT_RECORD [2]['name'];?></td>
<td><?php echo $_STUDENT_RECORD [2]['email'];?></td>
<td><?php echo $_STUDENT_RECORD [2]['grade'];?></td>
</tr>
<tr>
<td><?php echo $_STUDENT_RECORD [3]['name'];?></td>
<td><?php echo $_STUDENT_RECORD [3]['email'];?></td>
<td><?php echo $_STUDENT_RECORD [3]['grade'];?></td>
</tr>
</body>
</html>












