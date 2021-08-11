<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $this->call(SettingsTableSeeder::class);
	    $this->call(PagesTableSeeder::class);
	    $this->call(BrandsTableSeeder::class);
	    $this->call(BlogTableSeeder::class);
	    $this->call(BlogCategoriesTableSeeder::class);
	    $this->call(SlidersTableSeeder::class);
	    $this->call(SuppliersTableSeeder::class);
	    $this->call(StockSeeder::class);
	    $this->call(CountriesTableSeeder::class);
	    $this->call(CitiesTableSeeder::class);
	    $this->call(LoggersTableSeeder::class);
	    $this->call(UsersTableSeeder::class);
	    $this->call(RolesTableSeeder::class);
	    $this->call(RoleUserTableSeeder::class);
	    $this->call(CategoriesTableSeeder::class);
	    $this->call(TagsTableSeeder::class);
	    $this->call(ManufacturersTableSeeder::class);
	    $this->call(ProductsTableSeeder::class);
	    $this->call(GalleriesTableSeeder::class);
	    $this->call(ProductTagTableSeeder::class);
	    $this->call(GroupAttributesTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
	    $this->call(ProductAttributeTableSeeder::class);
	    $this->call(StatusesTableSeeder::class);
	    $this->call(PaymentsTableSeeder::class);
	    $this->call(LanguagesTableSeeder::class);
	    $this->call(CurrenciesTableSeeder::class);
	    $this->call(OptionTableSeeder::class);
	    $this->call(DocumentTableSeeder::class);
	    $this->call(ValueOptionTableSeeder::class);
	    $this->call(ProductValuesTableSeeder::class);
	    $this->call(RegionsTableSeeder::class);
	    $this->call(ProductProductValuesTableSeeder::class);
	    $this->call(ProductCategoryTableSeeder::class);
	    $this->call(CategoryGroupAttributeTableSeeder::class);
	    $this->call(WarehousesTableSeeder::class);


        //$this->call(CommentsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
