<!-- ///////////////////---------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\
                         FORMULARIO DE EDITAR MODULOS
    ////////////////////----------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\ -->


<form action="{{url('modulos', $modulo->id)}}" method="POST" role="form">


<style>
        h1{
            font: bold 80px  Agency FB, sans-serif;
        color:yellow;
        text-shadow: 10px 5px 3px black;
        padding: 15px 0px;
        }
        h1{
            margin-left:420px;
            margin-top:10px ;
        }

        hr{
        color: gray;
        border:2px solid gray;
        width: auto;
        }

        hr{
            margin-top:-40px;
        }

        legend{
        font: bold 25px Agency FB, sans-serif;
        color: teal;
        text-align: left;

        padding: 20px 180px;
        }

        label {
        font:  bold 20px Agency FB, sans-serif;
        margin-left:  40px;


        }

        input{
            border: 2px solid gray;
            width:20%;
            height:30px;
            margin-left:20px;
            margin-top:50px;
        }

        button{
            border-radius:  20px ;
            background-color: black;
            color: white;
            width: 200px;
            height: 40px;
            margin-left: 290px;
            text-align: center;
            padding: 5px;
            margin-top:30PX;
        }
        button:hover{
            background-color: #434343;
            color: yellow;
        }
        .linea {
            color: black;
            border:1px solid gray;
            width: 600px;
            margin-top:-10px;
            margin-left:5px;
        }

    </style>
@csrf()
@method('PATCH')
<h1>TABLA MODULOS</h1>
<hr>

<legend>MODIFICAR MODULO</legend>
<hr class="linea">
<div class="form-group">

    <label for="">Nombre del Modulo</label>
    <input value="{{$modulo->modulo}}" name="modulo" type="form-control" id="modulo" placeholder="">

</div>
<button type="submit" class="btn btn-primary">ACTUALIZAR</button>
</form>
