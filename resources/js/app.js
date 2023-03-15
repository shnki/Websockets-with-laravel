const { default: axios } = require('axios');

require('./bootstrap');

const form = document.getElementById('form')

const input_message= document.getElementById('input-message');
const message_list = document.getElementById('messages_list');
const create_room_btn = document.getElementById('create_room_btn');



form.addEventListener('submit',function(event){
    
    event.preventDefault()
    const userInput = input_message.value;
    axios.post('/chat-message',{
        message: userInput,
        channel:'ch1'
    })

}) 

const channel = Echo.join("presence.channel.1");

channel.here((users)=>{
console.log({users})
console.log('subscribed')

}).joining((user)=>
console.log({user},"joined")
).leaving((user)=>
console.log({user},"leave")
)

.listen('.podcast',function(e){

    console.log(e)  
    const message = e.message;

    const message_contanier = document.createElement('div');
    message_contanier.setAttribute('class',' flex items-end mb-4')
    message_contanier.innerHTML = `<div class="bg-white rounded-lg py-2 px-4 max-w-xs shadow-md mr-4"><p class="text-sm text-gray-800">${message}</p></div> <p class="text-xs text-gray-500">${  new Date().toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true })}</p>`;
    
    message_list.append(message_contanier);
})


