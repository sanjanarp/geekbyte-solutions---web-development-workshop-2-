    const button = document.querySelector('#submit');
    const colors = ['#FFFFFF', 'rgb(255, 185, 0)', 'rgb(255, 0, 111)'];
    
    button.addEventListener('mouseover', changeColor);
    
    function changeColor() {
      const randomColor = colors[Math.floor(Math.random() * colors.length)];
      button.style.backgroundColor = randomColor;
    }