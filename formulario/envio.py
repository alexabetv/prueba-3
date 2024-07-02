#importamons lo necesario
from flask import Flask, render_template, request

#instancia de Flask. Aplicacion
app = Flask (__name__)

@app.route('/')
def index():
    return render_template('your_template.html')

if __name__ == '__main__':
    app.run(debug=True)

#creamos nuestro primer route. '/login'
@app.route('/')
def template ():
    return render_template("form.html")

@app.route('/usuario',methods=['POST'])
def usuario():
    rut = request.form['rut']
    nombre = request.form['nombre']
    apellidoPaterno = request.form['apellidoPaterno']
    apellidoMaterno = request.form['apellidoMaterno']
    direcc = request.form['direcc']
    email = request.form['email']
    fono = request.form['fono']
    admin = request.form['admin']

    return "<h1>Bienvenido " + nombre + " " + apellidoPaterno + " " + apellidoMaterno + ", en seguida te llamamos al " + fono + "</h1>"