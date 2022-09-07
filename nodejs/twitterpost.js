const sdk = require('api')('@smartproxy/v1.0#25e7913l1ow524w');

sdk.auth('SPusername', 'SPpassword');
sdk.realTimeExample({
  target: 'universal',
  parse: false,
  headless: 'html',
  url: 'https://twitter.com/elonmusk/status/1552317587694010368?cxt=HHwWgIC-keOn-IorAAAA',
  device_type: 'desktop'
})
  .then(res => console.log(res))
  .catch(err => console.error(err));