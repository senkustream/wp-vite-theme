import './style.css';
import monoLogImg from '/images/mono-log-unsplash.jpg';

document.getElementById('message').innerHTML = `
    <p>Hello from main.js file</p>
    <img src="${monoLogImg}" alt="Unsplash image" />
`;