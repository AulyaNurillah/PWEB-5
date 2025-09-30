<!-- <?php
// react.php - simple React demo that posts to proses_form.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>React Demo - Bimbel 404</title>
  <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
  <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
  <script crossorigin src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    .card { max-width: 420px; margin: 0 auto; padding: 16px; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,0.1); }
    input { width:100%; padding:8px; margin-bottom:8px; }
  </style>
</head>
<body>
  <div id="root"></div>

  <script type="text/babel">
    const { useState } = React;

    function App() {
      const [username, setUsername] = useState('');
      const [password, setPassword] = useState('');
      const [msg, setMsg] = useState(null);

      const submit = async (e) => {
        e.preventDefault();
        const fd = new FormData();
        fd.append('username', username);
        fd.append('password', password);

        try {
          const res = await fetch('proses_form.php', { method: 'POST', body: fd });
          const data = await res.json();
          setMsg(data.message);
          if (data.success) {
            setUsername(''); setPassword('');
          }
        } catch (err) {
          setMsg('Network error');
        }
      };

      return (
        <div className="card">
          <h2>React Form Demo</h2>
          {msg && <div style={{marginBottom:8}}>{msg}</div>}
          <form onSubmit={submit}>
            <input value={username} onChange={e => setUsername(e.target.value)} placeholder="Username" required />
            <input value={password} onChange={e => setPassword(e.target.value)} placeholder="Password" type="password" required />
            <button type="submit">Register</button>
          </form>
        </div>
      );
    }

    ReactDOM.createRoot(document.getElementById('root')).render(<App />);
  </script>
</body>
</html> -->
