<footer class="admin-footer">
  <p>&copy; <?php echo date("Y"); ?> Durk - Todos os direitos reservados.</p>
  <p>Desenvolvido por Erk & Dunk</p>
</footer>
</body>
</html>

<style>
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }

  .wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  main {
    flex: 1;
  }

  .admin-footer {
    background-color: #000;
    color: white;
    text-align: center;
    padding: 15px;
    width: 100%;
  }

  .admin-footer p {
    margin: 5px 0;
    font-size: 0.9em;
  }

  .admin-footer p:first-child {
    font-weight: bold;
  }
</style>
