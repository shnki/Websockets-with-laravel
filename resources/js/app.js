const { default: axios } = require('axios');

require('./bootstrap');

const form = document.getElementById('form')

const input_message= document.getElementById('input-message');
const message_list = document.getElementById('messages_list');
form.addEventListener('submit',function(event){
    
    event.preventDefault()
    const userInput = input_message.value;
    axios.post('/chat-message',{
        message: userInput
    })

}) 
const channel = Echo.channel("public.playground.1");

channel.subscribed(()=>{
console.log('subscribed')

}).listen('.podcast',function(e){

    console.log(e)  
    const message = e.message;

    const li_for_message = document.createElement('li');

    li_for_message.textContent =message;

    message_list.append(li_for_message);
})