<style id="globalStyle">
  :root{
    --text-color: #221B19;
    --text-color-rgb: 34, 27, 25;
    --bg-color: #FFFEF4;
    --bg-color-rgb: 255, 254, 244;
    --img-color: #3B3837;
    --img-color-rgb: 58, 62, 61;
    --doc-first: #F7F7F2;
    --doc-second: #F7F7ED;
    --doc-third: #EEEEE0;
    --doc-center: #E0E0CE;
    --doc-bg: #D7E0D5;
    --loc-bg: #FFFEF4;
    --loc-bg-active: #EFF4E6;
    --footer-bg: #3A3E3D;
    --footer-title-color: #FFFEF4;
  }
</style>
<script>
  //Global Styles
  // default
  const styleDefault = `:root{
    --text-color: #221B19;
    --text-color-rgb: 34, 27, 25;
    --bg-color: #FFFEF4;
    --bg-color-rgb: 255, 254, 244;
    --img-color: #3B3837;
    --img-color-rgb: 58, 62, 61;
    --doc-first: #F7F7F2;
    --doc-second: #F7F7ED;
    --doc-third: #EEEEE0;
    --doc-center: #E0E0CE;
    --doc-bg: #D7E0D5;
    --loc-bg: #FFFEF4;
    --loc-bg-active: #EFF4E6;
    --footer-bg: #3A3E3D;
    --footer-title-color: #FFFEF4;
  }`
  // dark
  const styleDark = `:root{
    --text-color: #FFFEF4;
    --text-color-rgb: 255, 254, 244;
    --bg-color: #3A3E3D;
    --bg-color-rgb: 58, 62, 61;
    --img-color: #FFFEF4;
    --img-color-rgb: 255, 254, 244;
    --doc-first: #191A1A;
    --doc-second: #1E1F1F;
    --doc-third: #232424;
    --doc-center: #2E3231;
    --doc-bg: #222524;
    --loc-bg: #222524;
    --loc-bg-active: #221B19;
    --footer-bg: #221B19;
    --footer-title-color: #FFFEF4;
  }`
  const globalStyle = document.getElementById('globalStyle')

  if( localStorage.getItem('localStyle') ){
    globalStyle.innerHTML = localStorage.getItem('localStyle') === 'default' ? styleDefault : styleDark
  }
</script>