<?php
    require_once 'functions.php';

    $query = "SELECT buka FROM dokter where id_dokter = 1 and buka=1";
    $row = mysqli_query($conn,$query);
    $date = returnDate();
    $no_urut=0;

    function getMaxAntri($conn,$date)
        {
            $querynourut = "SELECT MAX(urut_antrian) from antrian where tanggal = '$date' "; 
              $query1nourut = mysqli_query($conn,$querynourut);
                $query2nourut = mysqli_fetch_assoc($query1nourut);
               $maks = $query2nourut['MAX(urut_antrian)'];
       
            return $maks;
        }

        

        function getWaktuBuka($conn)
        {
            $querynourut = "SELECT waktu_buka from dokter where id_dokter = 1 and buka=1";
              $query1nourut = mysqli_query($conn,$querynourut);
                $query2nourut = mysqli_fetch_assoc($query1nourut);
               $waktu_buka= $query2nourut['waktu_buka'];
       
            return $waktu_buka;
        }

        function getCurrentAntriJalan($conn)
        {
            $querynourut = "SELECT urut_antrian from dokter where id_dokter = 1 ";
              $query1nourut = mysqli_query($conn,$querynourut);
                $query2nourut = mysqli_fetch_assoc($query1nourut);
               $urut_antrian= $query2nourut['urut_antrian'];
       
            return $urut_antrian;
        }

        function getBuka($conn)
        {
            $querynourut = "SELECT buka from dokter where id_dokter = 1 ";
              $query1nourut = mysqli_query($conn,$querynourut);
                $query2nourut = mysqli_fetch_assoc($query1nourut);
               $buka= $query2nourut['buka'];
       
            return $buka;
        }

        function getSelanjutnya($conn)
        {
            $TIME_NOW = getWaktuBuka($conn);
           
            $TIME_NEXT= new DateTime($TIME_NOW);

            $TIME_NEXT->add(new DateInterval('PT' . 10 . 'M'));

            $TIME_NEXT = $TIME_NEXT->format("Y-m-d H:i:s");

            print $TIME_NEXT;
        }

    if(mysqli_num_rows($row)==0)
        {
            ?>  <label for="queue-num" class="queue-number" style="font-size:40px;color:red;margin-top:-20px"> Tutup </label>     <?php
        }

    if(mysqli_num_rows($row)==1)
        {
           
            
            $max = getMaxAntri($conn,$date);
           
            
            $antri = getCurrentAntriJalan($conn);
            $buka = getBuka($conn);

            
            if($antri==0)
                               { $query = "UPDATE dokter SET urut_antrian=1 where id_dokter = 1";
                                mysqli_query($conn,$query);}
           
            if($antri<=$max)
            {
              
                    $TIME_NOW = getWaktuBuka($conn);
           
                    $TIME_NEXT= new DateTime($TIME_NOW);

                    $TIME_NEXT->add(new DateInterval('PT' . 10 . 'M'));

                    $TIME_NEXT = $TIME_NEXT->format("Y-m-d H:i:s");
                    
                    $date = date("Y-m-d H:i:s");

                    $query=mysqli_query($conn,"select urut_antrian from dokter where id_dokter=1");
                    $query2=mysqli_fetch_array($query);
                    $no_urut=$query2['urut_antrian'];
                    
                   ?>  <label for="queue-num" class="queue-number"> <?php print $no_urut; ?> </label>     <?php
                   
                        if($date > $TIME_NEXT)
                            {
                                $query2 = "UPDATE  DOKTER set waktu_buka='$date' where id_dokter=1";
                                mysqli_query($conn,$query2);
                            }

                        if($date == $TIME_NEXT )
                            {
                              if($antri!=$max)
                               { $query = "UPDATE dokter SET urut_antrian=urut_antrian+'1' where id_dokter = 1";
                                mysqli_query($conn,$query);
                               }

                            
                              $query2 = "UPDATE  DOKTER set waktu_buka='$date' where id_dokter=1";
                              
                              mysqli_query($conn,$query2);
                             
                              

                              $TIME_NEXT= new DateTime($TIME_NOW);

                              $TIME_NEXT->add(new DateInterval('PT' . 10 . 'M'));
          
                              $TIME_NEXT = $TIME_NEXT->format("Y-m-d H:i:s");
                            }
                    
            }   
        }
    #CEK APAKAH ANTRIAN UDAH DIBUKA BELUM MELALUI DATABASE DOKTER
    #JIKA DIBUKA MULAI DARI "DATE_NOW
    #GET ANTRIAN FROM USER_ID
    #GET MAX ANTRIAN
    #STOP=1;
    #WHILE(ANTRIAN<MAX)
            #IF(STOP=1;DOKTER['WAKTU_BUKA]=DATE_NOW;STOP=00);
            #IF(DATE_NOW=DOKTER['WAKTU_BUKA']+10MENIT) {ANTRIAN+1.;DOKTER['WAKTU_BUKA]==DATE_NOW;STOP=1};
             
    
    #PEMBATALAN ANTRIAN
    #DELETE ANTRIAN FROM USER_ID 
    #SET @A := 0;
    #UPDATE URUT_ANTRIAN
    #SET URUT_ANTRIAN = 'URUT_ANTRIAN-1'
    #WHERE DATE ="ANTRIAN DATE';
?>