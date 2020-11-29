<style>
  html {
    box-sizing: border-box;
    font-size: 10px;
    line-height: 1.42857143;
  }

  *,
  *:before,
  *:after {
    box-sizing: inherit;
  }

  body {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100vh;
    position: relative;
    background-image: linear-gradient(to top, #09203f 0%, #1c3e58 100%);
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
  }

  main {
    margin: auto;
  }

  .modal {
    background: #e55039;
    color: #FFF;
    width: 60rem;
    border-radius: 4px;
    text-align: center;
    padding: 10rem 4rem 4rem 4rem;
    position: relative;
  }

  .modal__icon {
    position: absolute;
    top: -3rem;
    left: 50%;
    margin-left: -165px;
    background: #e55039;
    padding: 3rem 12rem 0 12rem;
    border-radius: 50%;
  }

  .modal__heading {
    text-transform: uppercase;
    font-size: 2.6rem;
  }

  .modal p {
    font-size: 1.5rem;
  }

  .email-box {
    position: absolute;
    bottom: -2rem;
    left: 50%;
    margin-left: -20rem;
    width: 40rem;
  }

  .email-box__input {
    color: #333333;
    display: block;
    width: 100%;
    height: 4rem;
    border-radius: 4px;
    border: 1px solid #FFF;
    font-size: 1.4rem;
    padding: 1rem;
  }

  .email-box__button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: none;
    background: transparent;
    font-size: 2rem;
    position: absolute;
    color: #e55039;
    right: 0.8rem;
    top: 0.8rem;
    padding: 0;
  }

  .email-box__button:hover,
  .email-box__button:focus {
    color: #a32815;
  }

  @media only screen and (max-width: 600px) {
    .modal {
      width: 30rem;
    }

    .modal__icon {
      margin-left: -105px;
      padding: 3rem 6rem 0 6rem;
      border-radius: 50%;
    }

    .email-box {
      margin-left: -12.5rem;
      width: 25rem;
    }
  }
</style>
<main>
  <div class="modal">
    <div class="modal__icon">
      <img width="90" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzIwMCcgd2lkdGg9JzIwMCcgIGZpbGw9IiNmZmZmZmYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA2NCA2NCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNjQgNjQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj48cGF0aCBkPSJNNTYuNTcsOC4zNDdjLTMuNDUtMi44NTgtNy45NTUtNC4wMjItMTIuMzU4LTMuMTg4Yy0wLjAwNywwLjAwMS0wLjAxNCwwLjAwMi0wLjAyLDAuMDA0TDI1Ljc5NSw5LjAyMSAgYy0wLjA0NiwwLjAxLTAuMDg3LDAuMDMtMC4xMywwLjA0NmMtMi40MzcsMC4yMTYtNC43MDEsMS4wMjEtNi42NjUsMi4yNjZWOGgzYzAuNTUzLDAsMS0wLjQ0NywxLTFWM2MwLTAuNTUzLTAuNDQ3LTEtMS0xaC04ICBjLTAuNTUzLDAtMSwwLjQ0Ny0xLDF2MTUuNjU5Yy0wLjYzNiwxLjY2Mi0xLDMuNDU4LTEsNS4zNDF2M0gzYy0wLjU1MywwLTEsMC40NDctMSwxdjExYzAsMC41NTMsMC40NDcsMSwxLDFoOC40NDdsLTIuOTk0LDYuNTg2ICBjLTEuOTMxLDQuMjQ4LTEuOTUyLDguMzcxLTAuMDYsMTEuMzExQzEwLjA5OCw2MC41NDMsMTMuMTU0LDYyLDE3LDYyYzUuODI3LDAsMTIuNDA4LTMuNDE2LDE3LTguMzM2VjYxYzAsMC41NTMsMC40NDcsMSwxLDFoOWg1ICBjMC41NTMsMCwxLTAuNDQ3LDEtMVYzNi45MWwxMS4zMy0zLjk2NkM2MS43MzEsMzIuODA0LDYyLDMyLjQyNSw2MiwzMlYxOS44OTZDNjIsMTUuNDE2LDYwLjAyMSwxMS4yMDYsNTYuNTcsOC4zNDd6IE0xNSw0aDZ2MmgtMyAgYy0wLjU1MywwLTEsMC40NDctMSwxdjUuODI3Yy0wLjEwMywwLjA5Mi0wLjE5NCwwLjE5Ni0wLjI5NCwwLjI5MWMtMC4xODMsMC4xNzQtMC4zNjMsMC4zNS0wLjUzNywwLjUzMiAgYy0wLjE1MywwLjE2MS0wLjMwMSwwLjMyNS0wLjQ0NywwLjQ5MmMtMC4xODYsMC4yMTMtMC4zNjYsMC40My0wLjU0LDAuNjUzYy0wLjA1OCwwLjA3NS0wLjEyNCwwLjE0My0wLjE4MSwwLjIxOVY0eiBNMTQsMjQgIGMwLTEuNzA5LDAuMzQtMy4zMzgsMC45NDItNC44MzRjMC4zOC0wLjk0NywwLjg3Ni0xLjg0MywxLjQ2My0yLjY3MmMwLjA2NS0wLjA5MiwwLjEzNS0wLjE4LDAuMjAyLTAuMjcgIGMwLjIyNi0wLjMwMywwLjQ2Ni0wLjU5NCwwLjcxOC0wLjg3NmMwLjA5Ni0wLjEwNywwLjE5MS0wLjIxNSwwLjI5LTAuMzE5YzAuMjc0LTAuMjg3LDAuNTYzLTAuNTYsMC44NjItMC44MjIgIGMyLjA2OS0xLjgwMyw0LjcwNy0yLjk1Nyw3LjYwOS0zLjE2MWMwLjAwMiwwLDAuMDA0LDAuMDAxLDAuMDA2LDAuMDAxbDAuMDUxLTAuMDAzQzI2LjQyNywxMS4wMjUsMjYuNzExLDExLDI3LDExICBjNi4xMzQsMCwxMS4yNzcsNC4yNzYsMTIuNjM3LDEwaC0yLjgyMUMzNi45MjgsMjAuNjg2LDM3LDIwLjM1MiwzNywyMHYtMWMwLTEuNjU0LTEuMzQ2LTMtMy0zYy0yLjA4NiwwLTMuOTI0LDEuMDcxLTUsMi42OSAgYy0xLjA3Ni0xLjYyLTIuOTE0LTIuNjktNS0yLjY5Yy0xLjY1NCwwLTMsMS4zNDYtMywzdjAuNWMwLDAuNTM5LDAuMTMzLDEuMDQ0LDAuMzUxLDEuNUgxN2MtMC41NTMsMC0xLDAuNDQ3LTEsMXY0djFoLTJWMjR6IE0zMCwyNSAgdi0yaDRoNS45NDlDMzkuOTc1LDIzLjMzMSw0MCwyMy42NjIsNDAsMjR2MUgzMHogTTQwLDI3djExSDMwVjI3SDQweiBNMzAuMTI3LDIxYzAuNDQ0LTEuNzI0LDIuMDEzLTMsMy44NzMtM2MwLjU1MiwwLDEsMC40NDgsMSwxICB2MWMwLDAuNTUyLTAuNDQ4LDEtMSwxSDMwLjEyN3ogTTE4LDI1di0yaDYuNUgyOHYySDE4eiBNMjgsMjd2MTFIMThWMjh2LTFIMjh6IE0yMywxOS41VjE5YzAtMC41NTIsMC40NDgtMSwxLTEgIGMxLjg2LDAsMy40MjksMS4yNzYsMy44NzMsM0gyNC41QzIzLjY3MywyMSwyMywyMC4zMjcsMjMsMTkuNXogTTQsMzh2LTloOWgzdjloLTNINHogTTM1LjU5OCw0OC4yMjUgIGMtMC4xMTYsMC4yMDEtMC4yMzksMC4zOTgtMC4zNjIsMC41OTZjLTAuMzE5LDAuNTA5LTAuNjYsMS4wMTctMS4wMzYsMS41MjFjLTAuMDA0LDAuMDA1LTAuMDA1LDAuMDExLTAuMDA5LDAuMDE3ICBDMzAuMDM0LDU1LjkyMywyMy4wNTksNjAsMTcsNjBjLTMuMTQzLDAtNS42MDItMS4xMzItNi45MjUtMy4xODZjLTEuNTE4LTIuMzU3LTEuNDQ1LTUuNzg0LDAuMTk4LTkuNEwxMy42NDQsNDBIMTdoMjIuNDQ3ICBsLTAuOCwxLjc2bC0yLjE5NCw0LjgyNmMtMC4xOCwwLjM5Ni0wLjM4MywwLjc4NS0wLjU5MiwxLjE3MkMzNS43NzYsNDcuOTE0LDM1LjY4OCw0OC4wNywzNS41OTgsNDguMjI1eiBNNDMsNjBoLTd2LTguNzI5ICBjMC4xNzgtMC4yNDUsMC4zNDUtMC40OTEsMC41MTEtMC43MzhjMC4wNjEtMC4wOSwwLjEyNC0wLjE3OSwwLjE4My0wLjI3YzAuMjU2LTAuMzkyLDAuNDkyLTAuNzg2LDAuNzE3LTEuMTggIGMwLjA3LTAuMTIyLDAuMTM4LTAuMjQ1LDAuMjA1LTAuMzY4YzAuMjM2LTAuNDM0LDAuNDYxLTAuODY4LDAuNjU3LTEuMzAxbDMuNDYtNy42MTFMNDMsMzkuMzZWNjB6IE00OCw2MGgtM1YzOC42NmwxLjEyNS0wLjM5NCAgTDQ4LDM3LjYxVjYweiBNNjAsMzEuMjlsLTExLjMyOSwzLjk2NmMwLDAtMC4wMDEsMC0wLjAwMSwwTDQyLDM3LjU5VjI2di0yYzAtMC40NzMtMC4wMjgtMC45MzgtMC4wNzEtMS40ICBjLTAuMDEzLTAuMTQ0LTAuMDM1LTAuMjg1LTAuMDUyLTAuNDI4Yy0wLjAzOS0wLjMyMS0wLjA4Ny0wLjYzOS0wLjE0Ni0wLjk1M2MtMC4wMjktMC4xNTUtMC4wNi0wLjMwOS0wLjA5NC0wLjQ2MyAgYy0wLjA3LTAuMzE1LTAuMTUxLTAuNjI1LTAuMjQtMC45MzJjLTAuMDM4LTAuMTMtMC4wNzEtMC4yNi0wLjExMi0wLjM4OWMtMC4xMzctMC40MjYtMC4yODctMC44NDYtMC40Ni0xLjI1NSAgYy0wLjAxNS0wLjAzNi0wLjAzNC0wLjA3MS0wLjA1LTAuMTA3Yy0wLjE2MS0wLjM3Mi0wLjMzOC0wLjczNi0wLjUyNy0xLjA5MmMtMC4wNjctMC4xMjUtMC4xMzktMC4yNDctMC4yMDktMC4zNyAgYy0wLjE1Mi0wLjI2Ni0wLjMxLTAuNTI4LTAuNDc3LTAuNzg0Yy0wLjA4NC0wLjEyOC0wLjE2OC0wLjI1NS0wLjI1NS0wLjM4Yy0wLjE4MS0wLjI1OS0wLjM3MS0wLjUxMS0wLjU2Ny0wLjc1OCAgYy0wLjA3OS0wLjEtMC4xNTQtMC4yMDItMC4yMzYtMC4yOTljLTAuMjgxLTAuMzM2LTAuNTc0LTAuNjYxLTAuODgyLTAuOTcxYy0wLjA0NS0wLjA0NS0wLjA5NS0wLjA4Ni0wLjE0MS0wLjEzMSAgYy0wLjI2OC0wLjI2Mi0wLjU0NS0wLjUxNC0wLjgzMi0wLjc1NmMtMC4xMTEtMC4wOTMtMC4yMjUtMC4xODEtMC4zMzgtMC4yNzFjLTAuMjM2LTAuMTg4LTAuNDc3LTAuMzY5LTAuNzI1LTAuNTQyICBjLTAuMTI2LTAuMDg4LTAuMjUyLTAuMTc2LTAuMzgtMC4yNmMtMC4yNjYtMC4xNzUtMC41MzktMC4zMzgtMC44MTYtMC40OTZjLTAuMTEtMC4wNjItMC4yMTYtMC4xMjktMC4zMjctMC4xODkgIGMtMC4zODYtMC4yMDctMC43ODEtMC4zOTktMS4xODYtMC41NzJjLTAuMDg2LTAuMDM3LTAuMTc2LTAuMDY2LTAuMjYzLTAuMTAxYy0wLjI1OC0wLjEwNS0wLjUxNi0wLjIxLTAuNzgxLTAuMzAxbDEyLjc2MS0yLjY3OCAgYzMuODE2LTAuNzE2LDcuNzEzLDAuMjksMTAuNzAxLDIuNzY2QzU4LjI4NSwxMi4zNjQsNjAsMTYuMDEzLDYwLDE5Ljg5NlYzMS4yOXoiPjwvcGF0aD48cGF0aCBkPSJNMTUuMTA1LDQyLjU1M2wtMyw2bDEuNzg5LDAuODk1TDE2LjYxOCw0NEgzMXYtMkgxNkMxNS42MjEsNDIsMTUuMjc1LDQyLjIxNCwxNS4xMDUsNDIuNTUzeiI+PC9wYXRoPjxyZWN0IHg9IjYiIHk9IjMxIiB3aWR0aD0iOCIgaGVpZ2h0PSIyIj48L3JlY3Q+PHBvbHlnb24gcG9pbnRzPSI0LDggNiw4IDYsNiA4LDYgOCw0IDYsNCA2LDIgNCwyIDQsNCAyLDQgMiw2IDQsNiAiPjwvcG9seWdvbj48cmVjdCB4PSI3IiB5PSIxMiIgd2lkdGg9IjIiIGhlaWdodD0iMiI+PC9yZWN0PjxyZWN0IHg9IjIiIHk9IjE3IiB3aWR0aD0iMiIgaGVpZ2h0PSIyIj48L3JlY3Q+PHJlY3QgeD0iNjAiIHk9IjQ0IiB3aWR0aD0iMiIgaGVpZ2h0PSIyIj48L3JlY3Q+PHJlY3QgeD0iNTMiIHk9IjUxIiB3aWR0aD0iMiIgaGVpZ2h0PSIyIj48L3JlY3Q+PHBvbHlnb24gcG9pbnRzPSI2MCw1NiA1OCw1NiA1OCw1OCA1Niw1OCA1Niw2MCA1OCw2MCA1OCw2MiA2MCw2MiA2MCw2MCA2Miw2MCA2Miw1OCA2MCw1OCAiPjwvcG9seWdvbj48L3N2Zz4=" alt="Icon of Mailbox">
    </div>
    <h1 class="modal__heading">Reset Password</h1>
    <p>Masukkan Email untuk ganti password |
      <a style="margin-top: 15px; text-decoration: none; color: #fff" href="<?= base_url('auth'); ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
    </p>
    <?= $this->session->flashdata('message'); ?>
    <div class="email-box">
      <?= form_error('email', '<small style="color: #fff;" class="text-danger pl-3">', '</small>'); ?>
      <form action="<?= base_url('auth/lupaPassword'); ?>" method="post">
        <input type="text" name="email" class="email-box__input" placeholder="Email Address" />
        <button type="submit" class="email-box__button"><i class="ion-paper-airplane"><img style="padding-top: 0%; color: #e55039; width: 30px; height: 30px;" src="<?= base_url('assets/images/paper.png'); ?>"></i></button>
      </form>
    </div>
  </div>
</main>