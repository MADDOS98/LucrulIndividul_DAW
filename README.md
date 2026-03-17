# Studiu Individual - Dezvoltarea Aplicatiilor Web

## Descriere

Acesta este un proiect de studiu individual pentru cursul de Dezvoltarea Aplicatiilor Web. Aplicatia este construita folosind framework-ul Laravel si permite gestionarea articolelor.

## Caracteristici

- Crearea, editarea si vizualizarea articolelor
- Interfata web prietenoasa

## Tehnologii Utilizate

- **Backend**: Laravel (PHP)
- **Frontend**: Blade Templates, CSS, JavaScript
- **Baza de date**: MySQL / SQLite
- **Build Tool**: Vite
- **Testing**: PHPUnit

## Instalare

1. Cloneaza repository-ul:
   ```bash
   git clone <url-repository>
   cd studiuindividual
   ```

2. Instaleaza dependentele PHP:
   ```bash
   composer install
   ```

3. Instaleaza dependentele JavaScript:
   ```bash
   npm install
   ```

4. Copiaza fisierul de configurare:
   ```bash
   cp .env.example .env
   ```

5. Genereaza cheia aplicatiei:
   ```bash
   php artisan key:generate
   ```

6. Ruleaza migratiile bazei de date:
   ```bash
   php artisan migrate
   ```

7. (Optional) Populeaza baza de date cu date de test:
   ```bash
   php artisan db:seed
   ```

8. Compileaza asset-urile:
   ```bash
   npm run build
   ```

## Utilizare

Pentru a porni serverul de dezvoltare:

```bash
php artisan serve
```

Pentru a compila asset-urile in timpul dezvoltarii:

```bash
npm run dev
```

## Testare

Ruleaza testele cu:

```bash
php artisan test
```

## Structura Proiectului

- `app/Models/` - Modelele Eloquent (User, Article)
- `app/Http/Controllers/` - Controller-ele aplicatiei
- `resources/views/` - Template-urile Blade
- `database/migrations/` - Migratiile bazei de date
- `routes/web.php` - Ruturile web

## Autor

Mocanu Andrei
