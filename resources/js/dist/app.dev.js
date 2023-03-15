"use strict";

var _require = require('axios'),
    axios = _require["default"];

require('./bootstrap');

var form = document.getElementById('form');
var input_message = document.getElementById('input-message');
var message_list = document.getElementById('messages_list');
var create_room_btn = document.getElementById('create_room_btn');
form.addEventListener('submit', function (event) {
  event.preventDefault();
  var userInput = input_message.value;
  axios.post('/chat-message', {
    message: userInput,
    channel: 'ch1'
  });
});
var channel = Echo.join("presence.channel.1");
channel.here(function (users) {
  console.log({
    users: users
  });
  console.log('subscribed');
}).joining(function (user) {
  return console.log({
    user: user
  }, "joined");
}).leaving(function (user) {
  return console.log({
    user: user
  }, "leave");
}).listen('.podcast', function (e) {
  console.log(e);
  var message = e.message;
  var message_contanier = document.createElement('div');
  message_contanier.setAttribute('class', ' flex items-end mb-4');
  message_contanier.innerHTML = "<div class=\"bg-white rounded-lg py-2 px-4 max-w-xs shadow-md mr-4\"><p class=\"text-sm text-gray-800\">".concat(message, "</p></div> <p class=\"text-xs text-gray-500\">").concat(new Date().toLocaleString('en-US', {
    hour: 'numeric',
    minute: 'numeric',
    hour12: true
  }), "</p>");
  message_list.append(message_contanier);
});