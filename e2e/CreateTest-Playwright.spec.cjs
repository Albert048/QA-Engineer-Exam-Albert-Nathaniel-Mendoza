const { test, expect } = require('@playwright/test');
const { firefox } = require('playwright');

test('Create Test - Playwright', async () => {
  test.setTimeout(300000);
  const browser = await firefox.launch({ headless:true });
  const context = await browser.newContext();
  const page = await context.newPage();

  try{
  await page.goto('http://127.0.0.1:8000/login');
  await page.getByPlaceholder('Email').click();
  await page.getByPlaceholder('Email').fill('flatley.micah@example.org');
  await page.getByPlaceholder('Password').click();
  await page.getByPlaceholder('Password').fill('password');
  await page.locator('.btn.btn-primary.btn-block').click();
  await page.waitForTimeout(30000);
  await page.goto('http://127.0.0.1:8000/videos');
  await page.waitForLoadState('domcontentloaded');
  await page.locator('input[type="text"]').click();
  await page.locator('input[type="text"]').fill('Create Playwright');
  await page.getByRole('combobox').selectOption('5');
  await page.getByLabel('Editor editing area: main').click();
  await page.getByLabel('Editor editing area: main').fill('Hello Playwright');
  await page.getByText('Next').click();
  await page.waitForTimeout(5000)
  await page.setInputFiles('.d-none','e2e/photos/picture.png');
  await page.getByText('Next').click();
  await page.waitForTimeout(5000);
  await page.getByLabel('Datepicker input').click();
  await page.getByText('14').click();
  await page.getByRole('button', { name: 'Select' }).click();
  await page.getByText('Submit').click();
  await page.waitForTimeout(5000);
  await page.getByRole('button', { name: 'OK' }).click();
  } catch (error) {

    console.error('An error occured:', error);
  }
  finally{
    await browser.close();
  }
  
});