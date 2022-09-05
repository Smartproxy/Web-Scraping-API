const sdk = require('api')('@smartproxy/v1.0#25e7913l1ow524w');

sdk.auth('SPusername', 'SPpassword');
sdk.realTimeExample({
  target: 'universal',
  parse: false,
  url: 'https://www.tiktok.com/@soukainasing1/video/7139227399035571462'
})
  .then(res => console.log(res))
  .catch(err => console.error(err));