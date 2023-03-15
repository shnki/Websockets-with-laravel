<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
<div  class="bg-gray-100 h-screen flex flex-col">
  <div id="messages_list" class="flex-1 overflow-y-scroll px-4 py-8">
    <div class="flex items-end mb-4">
      <div class="bg-white rounded-lg py-2 px-4 max-w-xs shadow-md mr-4">
        <p class="text-sm text-gray-800">Hello!</p>
      </div>
      <p class="text-xs text-gray-500">10:00 AM</p>
    </div>
    <div class="flex items-end mb-4 justify-end">
      <div class="bg-blue-500 rounded-lg py-2 px-4 max-w-xs shadow-md ml-4">
        <p class="text-sm text-white">Hi there!</p>
      </div>
      <p class="text-xs text-gray-500">10:01 AM</p>
    </div>
    <div class="flex items-end mb-4">
      <div class="bg-white rounded-lg py-2 px-4 max-w-xs shadow-md mr-4">
        <p class="text-sm text-gray-800">How are you?</p>
      </div>
      <p class="text-xs text-gray-500">10:02 AM</p>
    </div>
    <div class="flex items-end mb-4 justify-end">
      <div class="bg-blue-500 rounded-lg py-2 px-4 max-w-xs shadow-md ml-4">
        <p class="text-sm text-white">I'm good, thanks!</p>
      </div>
      <p class="text-xs text-gray-500">10:03 AM</p>
    </div>
  </div>
  <div class="bg-white px-10 py-10 flex items-center">
    <input type="text" placeholder="Type a message..." class="flex-1 border border-gray-300 rounded-full px-4 py-2 mr-4">
    <button class="bg-blue-500 text-white rounded-full px-4 py-2">Send</button>
  </div>
  
</div>

    
  
        

    <form id="form">
        <div class="flex flex-row">

            <div class="  p-5 pb-20 fixed bottom-0 left-0 right-0 ">


                <label for="input-message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    message</label>
                <input id="input-message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your thoughts here...">


            </div>

        </div>






    </form>


    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
