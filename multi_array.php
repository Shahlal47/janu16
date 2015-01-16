<?php

$films = array(
    array('title' => 'Funny Movie 3',
          'genre' => 'comedy',
          'stars' => array('leading actress',
                           'leading actor',
                           'expendable dude',
                           'somebody else')
            ),
    array('title' => 'Funny Movie 3',
          'genre' => 'comedy',
          'stars' => array('leading actress',
                           'leading actor',
                           'expendable dude',
                           'somebody else')
    ),
    array('title' => 'Funny Movie 3',
          'genre' => 'comedy',
          'stars' => array('leading actress',
                           'leading actor',
                           'expendable dude',
                           'somebody else')
    ),
    array('title' => 'Funny Movie 3',
          'genre' => 'comedy',
          'stars' => array('leading actress',
                           'leading actor',
                           'expendable dude',
                           'somebody else')
    ),
    array('title' => 'Funny Movie 3',
          'genre' => 'comedy',
          'stars' => array('leading actress',
                           'leading actor',
                           'expendable dude',
                           'somebody else')
    ),
    array('title' => 'Funny Movie 3',
          'genre' => 'comedy',
          'stars' => array('leading actress',
                           'leading actor',
                           'expendable dude',
                           'somebody else')
    ),
    array('title' => 'Funny Movie 3',
          'genre' => 'comedy',
          'stars' => array('leading actress',
                           'leading actor',
                           'expendable dude',
                           'somebody else')
    ),
    array('title' => 'Funny Movie 3',
          'genre' => 'comedy',
          'stars' => array('leading actress',
                           'leading actor',
                           'expendable dude',
                           'somebody else')
    ),
    array('title' => 'Funny Movie 3',
          'genre' => 'comedy',
          'stars' => array('leading actress',
                           'leading actor',
                           'expendable dude',
                           'somebody else')
    ),
);
?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <section>
            <table border="1">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Stars</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($films as $data){
                    ?>
                    <tr>
                        <td><?php echo $data['title']; ?></td>
                        <td><?php echo $data['genre']; ?></td>
                        <td>
                            <ul>
                            <?php
                            foreach($data['stars'] as $role){
                                //var_dump($role);
                                ?>
                                <li><?php echo $role; ?></li>
                            <?php
                            }
                            ?>
                            </ul>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </section>
    </body>
</html>
