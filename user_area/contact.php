<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
     <!-- bootstrap links -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <style>
      .concontainer{
        width:80%;
        margin:50px auto;
      }
      .contact-box{
          
          display:flex;
        }
        .contact-left{
          flex-basis:60%;
          padding:40px 60px;
          font-weight:bold;
          
        }
        .contact-right{
          flex-basis:60%;
          padding:40px;
          background:rgb(240,170,124);
          color: #000;
          font-weight:bold;
        }
      
        .concontainer h2{
          margin-left:60px;
        }
        .concontainer p{
          margin-left:60px;
        }
        textarea{
          width:100%;
          
        }
        tr td:first-child{
          padding-right:20px;
        }
        tr td{
          padding-top:20px;
        }
      </style>

</head>
<body>
    <div class="concontainer">
        <h2>Connect with us</h2>
        <p>We would love to respond to your queries and help you succeed. <br>Feel
           free to get in touch with us.</p>
        <div class="contact-box">
          <div class="contact-left">
            <h3>Sent your request</h3>
            <form action="" method="post">
            <div class="form-outline mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="user"
                class="form-control" placeholder="Enter your username" autocomplete="off" 
                required="required"/>
            </div>
            <div class="form-outline mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone"
                class="form-control" placeholder="Enter your phone" autocomplete="off" 
                required="required"/>
            </div>
            <div class="form-outline mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email"
                class="form-control" placeholder="Enter your email" autocomplete="off" 
                required="required"/>
            </div>
            <div class="form-outline mb-3">
                <label>Message</label>
                <textarea rows="5" placeholder="Your message"></textarea>
            </div>
            <div class="submit mt-4 pt-2 ">
                <input type="submit" value="Submit" class="btn btn-primary py-2 px-3 border-0"
                name="submit">
            </div>

            </form>

    </div>
    <div class="contact-right">
      <h3>Reach us</h3>
      <table>
        <tr>
          <td>Email</td>
          <td>sunshinefurniturehouse@gmail.com </td>
      </tr>
      <tr>
        <td>Phone</td>
        <td>9841000000</td>
      </tr>
      <tr>
        <td>Address</td>
        <td>Khusibun,Kathmandu.</td>
      </tr>
      </table>

    </div>
      </div>
      </div>















