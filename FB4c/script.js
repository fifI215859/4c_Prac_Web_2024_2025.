document.getElementById('colorButton').addEventListener('click')
{
    const randomColor = colors[Math.floor(Math.random())* (colors.length)];
}
document.body.style.backgroundColor = randomColor;