<table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
   <tr>
    <td style="background-color: #ecf0f1; text-align: left; padding: 0">
     <a href="https://www.facebook.com/chamocell">
      <img width="50%" style="display:block; margin: 1.5% 3%" src="https://i.postimg.cc/7ZJJ7yKF/Logo-invertido-removebg-trasparente.png">
     </a>
    </td>
   </tr>
  
   <tr>
    <td style="padding: 0">
     <img style="padding: 0; display: block" src="https://i.postimg.cc/2jW526zS/tienda.png" width="100%">
    </td>
   </tr>
   
   <tr>
    <td style="background-color: #ecf0f1">
     <div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
      <h2 style="color: #e67e22; margin: 0 0 7px">Formato de Cliente</h2>
      <p style="margin: 2px; font-size: 15px">
         {{$contacto}}
       </p>
      <ul style="font-size: 15px;  margin: 10px 0">
       <li><strong>Usuario:</strong>{{$details['user']}}</li>
       <li><strong>Usuario:</strong>{{$details['name']}}</li>
       <li><strong>Usuario:</strong>{{$details['email']}}</li>
       <li><strong>Usuario:</strong>{{$details['title']}}</li>
       <li><strong>Usuario:</strong>{{$details['comment']}}</li>
      </ul>
      <div style="width: 100%;margin:20px 0; display: inline-block;text-align: center">
       <img style="padding: 0; width: 200px; margin: 5px" src="https://i.postimg.cc/9QtFVqvx/1618452874.jpg">
       <img style="padding: 0; width: 200px; margin: 5px" src="https://i.postimg.cc/13N7NG9H/digital-11.jpg">
      </div>
      <div style="width: 100%; text-align: center">
       <a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #3498db" href="https://www.facebook.com/chamocell">Ir a la página</a> 
      </div>
      <p style="color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0">Poketrainers Trujillo 2016</p>
     </div>
    </td>
   </tr>
  </table>

  
{{--    
<table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
   <tr>
       <td>
           <nav class="navbar" style="width: 100%; height: 100px; background: rgb(255, 252, 252);">
           <div class="nav-container" style="display:flex; padding:15px;justify-content: center;align-items: center;align-items: center;">
               <div class="row">
                   <div class="col-md-12 mt-4">
                       <h1 class="title_message" style="color: #fff;">Notificacion de Mensaje Entrante</h1>
                   </div>
                   <div class="col-md-12">
                       <p class="subtitle_message" style="color: #fff;">has recibido este mensaje desde tu tienda online</p>
               </div>
           </div>
       </nav>
       </td>
   </tr>
</table> --}}
<table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
   <tr>
       <td>
           <div class="box_message" style="margin-top:30px;">
               <div class="row_message" style="padding: 12px;">
                   <div class="col-menssage-12" style=" display: flex; justify-content:center;align-items:center;">
                       <div class="card-message" style="width: 700px; height: auto;border: 3px solid rgb(253, 129, 52);border-radius:10px;">
                           <div class="card-header-message" style=" text-align: center;padding: 10px;padding: 10px;border-bottom: 3px solid rgb(253, 129, 52);">
                               <strong>{{$contacto}}</strong>
                           </div>
                           <div class="card-body-message" style=" padding: 10px; ">
                               <h5 class="card-title-message" style="font-size: 18px;margin-bottom:15px;text-align:center;">Formulario de consulta</h5>
                               <p style="margin-bottom: 15px;">
                                   <strong>Usuari de la plataforma:</strong>
                                   {{$details['user']}}</p>
                               <p style="margin-bottom: 15px;">
                                   <strong>Name:</strong>
                                   {{$details['name']}}</p>
                               <p style="margin-bottom: 15px;">
                                   <strong>Correo:</strong>
                                   {{$details['email']}}</p>
                               <p style="margin-bottom: 15px;">
                                   <strong>Titulo:</strong>
                                   {{$details['title']}}</p>
                               <p style="margin-bottom: 15px;">
                                   <strong>Mensaje:</strong>
                                   {{$details['comment']}}</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </td>
   </tr>
</table> 



  
 


