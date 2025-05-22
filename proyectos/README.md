# Prueba1.2

mkdir repo-prueba-cosas #Crear carpeta
cd .\repo-prueba-cosas\ #Seleccionar carpeta en la terminal
git init # Iniciar el repositorio, pero de normal se crea en github, y se clona
git branch -M main # Renombrar la rama master a main
git branch # Ver las ramas locales creadas
git remote add origin <https://github.com/[UsuarioGitHub]/[TuRepositorio].git> # Conectar con el repo de GitHub
git checkout -b [nombre de la rama] # Crear la rama david-prueba y cambiarse a ella
git checkout <rama> # Cambiar de rama
Guardar y subir cambios
git add . # Guardar cambios en general (añadir al área de staging)
git commit -m "mensaje" # Hacer un commit (punto de guardado)
git push -u origin <rama> # Subir la rama actual y enlazarla con el remoto
git push # Subir los cambios al remoto , como hiciste antes el otro, solo es push
git pull # Descargar cambios del remoto
git branch # Ver las ramas locales
git branch -r # Ver las ramas remotas
git fetch --all #Para ver todas las ramas
git checkout main # Cambiar a la rama main (o la que quieras fusionar)
git merge [nombre rama] # Fusionar la rama david-prueba en main
////////////////////////LOS MIOS

# COMANDOS PARA GIT

mkdir repo-prueba-cosas
6 cd .\repo-prueba-cosas\

8 git init ( inicio reppo)
9 git commit -m "inicio del repositorio"

11 git branch -M main (para renombrar la master a main)
12 git branch ( para ver la ramas locales creadas)
13 git remote add origin https://github.com/Davidvera333/pruebas-cosas.git ( para conectarte al repo del github)
git checkout -b david-prueba ( para crear la rama david-prueba y cambiarse auto a ella)

21 git add . ( guardar cambios en general)
20 git commit -m "primer commit de prueba" ( hacer un commoit osea como un punto de guardado de cosas)

27 git push -u origin david-prueba ( esto es para enlazar la rama remota del repo a la que estas usando)

29 git push ( para subir las cosas)

31 git branch ( para ver las ramas , -r si es remota)

40 git merge david-prueba ( esto se hace si quieres fusionar las cosas de una rama a otra, por ejemplo tengo main y david , si quieres fusionar lo de david, entras a main y haces esto git merge david)

git add .
git commit -m "commit de las cosas"
git push
git pull (para pillar cosas del repo remoto)
git checkout _rama_ ( pra cambiar de rama)
git init ( para iniciar el repo )
git push -u origin (nombre rama Subir desde remoto:)

---

EL DE IA

# COMANDOS PARA GIT

## 1. Crear y entrar en el directorio del repositorio

```bash
mkdir repo-prueba-cosas
cd .\repo-prueba-cosas\
```

## 2. Inicializar el repositorio

```bash
git init                # Iniciar el repositorio
```

## 3. Configurar ramas y remoto

```bash
git branch -M main      # Renombrar la rama master a main
git branch              # Ver las ramas locales creadas
git remote add origin https://github.com/Davidvera333/pruebas-cosas.git   # Conectar con el repo de GitHub
```

## 4. Crear y cambiar de rama

```bash
git checkout -b david-prueba    # Crear la rama david-prueba y cambiarse a ella
git checkout <rama>             # Cambiar de rama
```

## 5. Guardar y subir cambios

```bash
git add .                       # Guardar cambios en general (añadir al área de staging)
git commit -m "mensaje"         # Hacer un commit (punto de guardado)
git push -u origin <rama>       # Subir la rama actual y enlazarla con el remoto
git push                        # Subir los cambios al remoto
git pull                        # Descargar cambios del remoto
```

## 6. Ver ramas

```bash
git branch                      # Ver las ramas locales
git branch -r                   # Ver las ramas remotas
```

## 7. Fusionar ramas

```bash
git checkout main               # Cambiar a la rama main (o la que quieras fusionar)
git merge david-prueba          # Fusionar la rama david-prueba en main
```
