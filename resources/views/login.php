<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="h-screen font-sans bg-gray-700">
      <div class="container mx-auto h-full flex flex-1 justify-center items-center">
          <div class="w-full max-w-lg">
            <div class="leading-loose">
              <form class="max-w-sm m-4 p-10 bg-white bg-opacity-25 rounded shadow-xl" action="/login" method="post" >
                  <p class="text-white font-medium text-center text-lg font-bold">LOGIN</p>
                    <div class="">
                      <p class="text-red-400 flex justify-center align-center"><?php if(isset($emailIncorrect)) echo "$emailIncorrect" ?></p>
                      <label class="block text-sm text-white" for="email">E-mail</label>
                      <input  name="email" class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="email" id="email"  placeholder="Digite o e-mail" aria-label="email" required>
                    </div>
                    <div class="mt-2">
                      <p class="text-red-400 flex justify-center align-center"><?php if(isset($passwordIncorrect)) echo "$passwordIncorrect" ?></p>
                      <label class="block  text-sm text-white">Password</label>
                      <input name="password" class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white"
                        type="password" id="password" placeholder="Digite a sua senha" arial-label="password" required>
                    </div>

                    <div class="mt-4 items-center flex justify-between">
                      <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded"
                        type="submit">Entrar</button>
                      <a class="inline-block right-0 align-baseline font-bold text-sm text-500 text-white hover:text-red-400"
                        href="#">Olvidaste tu contraseña ?</a>
                    </div>
                    <div class="text-center">
                      <a href="register" class="inline-block right-0 align-baseline cursor-pointer font-bold text-sm text-500 hover:text-red-400">
                          Crear una cuenta
                      </a>
                    </div>

              </form>

            </div>
          </div>
      </div>
    </div>
</body>
</html>