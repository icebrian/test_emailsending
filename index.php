<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Email Sending</title>
    <link rel="stylesheet" href="css/bulma.css">
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        Test Email Sending
      </h1>
      <p class="subtitle">
        We test, we see, we change, we fix and we finally go!
      </p>

      <div class="content">
        <p>
            As mentioned, this is what has already been mentioned.
        </p>

        <form name="contactform" method="post">
        <table width="450px">
        <tr>
        <td valign="top">
        <label for="subject">To *</label>
        </td>
        <td valign="top">
        <input  type="text" name="to" maxlength="100" size="30">
        </td>
        </tr>
        <!-- tr>
        <td valign="top">
        <label for="subject">Subject *</label>
        </td>
        <td valign="top">
        <input  type="text" name="subject" maxlength="100" size="30">
        </td>
        </tr -->
        <tr>
        <td valign="top">
        <label for="comments">Body *</label>
        </td>
        <td valign="top">
        <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
        </td>
        </tr>
        <tr>
        <td colspan="2" style="text-align:center">
        <button type="submit" formaction="relay.php">Relay</button>
        <button type="submit" formaction="smtp-auth.php">SMTP Auth</button>
        </td>
        </tr>
        </table>
        </form>

    </div><!-- content -->
   </div><!-- container -->
  </section>
  </body>
</html>

