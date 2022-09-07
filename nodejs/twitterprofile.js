const sdk = require('api')('@smartproxy/v1.0#25e7913l1ow524w');

sdk.auth('SPusername', 'SPpassword');
sdk.realTimeExample({
  target: 'universal',
  parse: false,
  headless: 'html',
  url: 'https://twitter.com/elonmusk',
  device_type: 'desktop'
})
  .then(res => console.log(res))
  .catch(err => console.error(err));