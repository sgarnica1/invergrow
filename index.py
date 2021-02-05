from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def inicio():
  return render_template('index.html')

@app.route('/nosotros')
def nosotros():
  return 'Nosotros'

if __name__ == '__main__':
  app.run(debug=True)