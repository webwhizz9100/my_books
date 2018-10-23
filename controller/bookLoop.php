<?php
                                        include'../../Model/dbfunctions.php';
                                        include'../../Model/conn.php';
                                    $stmt = $conn->prepare ('SELECT * FROM `book` INNER JOIN author ON book.AuthorID = author.AuthorID');
                                    $stmt->execute();
                                    $result = $stmt-> fetchAll();
                                    ?>

                                        