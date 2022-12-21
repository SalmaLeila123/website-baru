<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>NPK</td>
                <td><input type="text" name="npk"></td>
            </tr>
            <tr> 
                <td>Nama Karyawan</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Departemen</td>
                <td><input type="text" name="dept"></td>
            </tr>
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tgl"></td>
            </tr>
            <tr> 
                <td>Jam Mulai</td>
                <td><input type="time" name="jam_mulai"></td>
            </tr>
            <tr> 
                <td>Jam Selesai</td>
                <td><input type="time" name="jam_selesai"></td>
            </tr>
            <tr> 
                <td>Mulai Istirahat 1</td>
                <td><input type="time" name="m_istirahat_a"></td>
            </tr>
            <tr> 
                <td>Selesai Istirahat 1</td>
                <td><input type="time" name="s_istirahat_a"></td>
            </tr>
            <tr> 
                <td>Mulai Istirahat 2</td>
                <td><input type="time" name="m_istirahat_b"></td>
            </tr>
            <tr> 
                <td>Selesai Istirahat 2</td>
                <td><input type="time" name="s_istirahat_b"></td>
            </tr>
            <tr> 
                <td>Jam Lembur</td>
                <td><input type="text" name="jam_lembur"></td>
            </tr>
            <div class="form-group">
                        <label>Hari Libur / Kerja</label>
                        <div class="form-group">
                         <div class="form-line">
                            <select name="hari_lk" class="form-control show-tick">
                                <option value="">-- Pilih --</option>
                                <option value="WORK DAY">WORK DAY</option>
                                <option value="DAY OFF">DAY OFF</option>
                            </select>
                        </div>
                    </div>

                    <tr> 
            <td>Total Tuul</td>
                <td><input type="text" name="total_tuul"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $npk = $_POST['npk'];
        $nama= $_POST['nama'];
        $dept = $_POST['dept'];
        $tgl = $_POST['tgl'];
        $jam_mulai = $_POST['jam_mulai'];
        $jam_selesai = $_POST['jam_selesai'];
        $m_istirahat_a = $_POST['m_istirahat_a'];
        $s_istirahat_a = $_POST['s_istirahat_a'];
        $m_istirahat_b = $_POST['m_istirahat_b'];
        $s_istirahat_b= $_POST['s_istirahat_b'];
        $jam_lembur = $_POST['jam_lembur'];
        $hari_lk = $_POST['hari_lk'];
        $total_tuul = $_POST['total_tuul'];

        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(
            npk,nama,dept,tgl,jam_mulai,jam_selesai,m_istirahat_a,s_istirahat_a,m_istirahat_b,s_istirahat_b,jam_lembur,hari_lk,total_tuul) VALUES(
            '$npk','$nama','$dept','$tgl','$jam_mulai','$jam_selesai','$m_istirahat_a','$s_istirahat_a','$m_istirahat_b','$s_istirahat_b','$jam_lembur','$hari_lk','$total_tuul')");
        
        if ($result) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $result . "<br>" . $mysqli->error;
          }
          
         
    }
    ?>
</body>
</html>