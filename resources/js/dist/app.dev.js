"use strict";

var _require = require('axios'),
    axios = _require["default"];

require('./bootstrap');

var form = document.getElementById('form');
var input_message = document.getElementById('input-message');
var message_list = document.getElementById('messages_list');
form.addEventListener('submit', function (event) {
  event.preventDefault();
  var userInput = input_message.value;
  axios.post('/chat-message', {
    message: userInput
  });
});
var channel = Echo.channel("public.playground.1");
channel.subscribed(function () {
  console.log('subscribed');
}).listen('.podcast', function (e) {
  console.log(e);
  var message = e.message;
  var li_for_message = document.createElement('li');
  li_for_message.textContent = message;
  message_list.append(li_for_message);
});