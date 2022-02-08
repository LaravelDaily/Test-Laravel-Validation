## Task 1. Simple Validation Rules.

In `app/Http/Controllers/PostController.php` file, the `store()` method need validation rules: title should be required and unique.

Test method `test_simple_validation_rules()`.

---

## Task 2. Array Validation.

Imagine your form has fields as an array:

```
<input name="profile[name]" ... />
<input name="profile[email]" ... />
```

In `app/Http/Controllers/ProfileController.php` file, the `update()` method need validation rules: profile[name] and profile[email] fields should be required.

Test method `test_array_validation()`.

---

## Task 3. Showing Validation Errors.

In `resources/views/projects/create.blade.php` file, show the validation errors, for `"name" => "required", "description" => "required"` rules. Use whatever HTML structure you want, like `<ul><li>error</li><li>error 2</li></ul>`. No design needed, the test will just check if the error messages are present.

Test method `test_validation_errors_shown_in_blade()`.

---

## Task 4. Showing a Specific Validation Error.

In `resources/views/products/create.blade.php` file, show the validation error for `"name" => "required"`, using a specific Blade directive to show one specific error.

Test method `test_validation_specific_error_shown_in_blade()`.

---

## Task 5. Old Values Staying After Validation Error.

In `resources/views/teams/create.blade.php` file, the value of "name" field should remain in the form, after failed validation. Change the Blade file so that it would show old value.

Test method `test_old_value_stays_in_form_after_validation_error()`.

---

## Task 6. Form Request Validation.

In `app/Http/Controllers/ItemController.php` file, validation is performed via class StoreItemRequest, but that class doesn't exist, intentionally. Your task is to create it, with parameters of authorized true, and validation rules of name/title as required fields.

Test method `test_form_request_validation()`.

---

## Task 7. Update Forbidden Field.

In `app/Http/Controllers/UserController.php` file, in `update` method, the code updates all the fields. But users.is_admin should not be updated, even if it's passed via the request. Change the line with `$request->all()` to avoid this security issue of updating the admin.

Test method `test_update_forbidden_field()`.

---

## Task 8. Customize Validation Messages.

In `app/Http/Controllers/BuildingController.php` file, in `store` method, the code uses `StoreBuildingRequest` Form Request class. Change that class to customize the validation rule for "name" field as "required", to show message "Please enter the name" instead of the default "The field name is required".

Test method `test_custom_error_message()`.

---

## Task 9. Your Own Validation Rule.

In `app/Http/Controllers/ArticleController.php` file, in `store` method, the code uses `Uppercase` validation rule that you need to create with Artisan command, and fill in with the rule of "title" having first letter as uppercase with the error message "The title does not start with an uppercased letter".

Test method `test_custom_validation_rule()`.

---

