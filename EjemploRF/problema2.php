<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Problema #2</title>
</head>
<body>
  <main>
    <form id="form">
      <h1>Problema #2</h1>
      <h2>Rectangulo</h2>
      <label for="altura">Altura</label>
      <input id="altura" type="number" name="altura"/>
      <label for="anchura">Anchura</label>
      <input id="anchura" type="number" name="anchura"/>
      <input type="submit" value="Calcular"/>
    </form>
    <div id="resultado">
      <!-- Iran los resultados del calculo -->
    </div>
  </main>
</body>
<script>

  //✅ ¿Cuándo usar await?

  //Cuando estás dentro de una función async.
  //Cuando quieres que el código se detenga hasta tener una respuesta.
  //Para escribir código más limpio y entendible.
  //1. Con await (requiere estar dentro de async):
  //await detiene temporalmente la ejecución de una función async hasta que se resuelva una promesa.
//¿Qué hace addEventListener?
//Permite escuchar un evento (como click, submit, mouseover, keydown, etc.) y ejecutar una función //cuando ese evento ocurre.
//async (e) => { ... }
//significa que estás definiendo una función asíncrona que recibe un parámetro e (que normalmente //representa un evento del navegador, como un clic o el envío de un formulario)

  const form = document.getElementById('form');
  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const data = new FormData(form);
    const response = await fetch('class/class2.php', {
      method: 'POST',
      body: data
    });
   
    if (!response.ok) {
      const error = await response.text();
      alert("Error: " + error);
      return;
    }
    const result = await response.json();
    const resultadoDiv = document.getElementById('resultado');
    resultadoDiv.innerHTML = `
      <h3>Resultados</h3>
      <p>Diagonal: ${result.diagonal}</p>
      <p>Area: ${result.area}</p>
      <p>Perimetro: ${result.perimetro}</p>
    `;
  });
  
</script>
</html>