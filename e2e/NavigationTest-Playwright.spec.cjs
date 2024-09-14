const { test, expect } = require('@playwright/test');
const { chromium } = require('playwright');

test('Create Test - Playwright', async () => {
  test.setTimeout(300000);
  const browser = await chromium.launch({ headless:true });
  const context = await browser.newContext();
  const page = await context.newPage();

  try{
  await page.goto('http://127.0.0.1:8000/login');
  await page.getByPlaceholder('Email').click();
  await page.getByPlaceholder('Email').fill('fatlely.micah@example.org');
  await page.getByPlaceholder('Password').click();
  await page.getByPlaceholder('Password').fill('password');
  await page.locator('.btn.btn-primary.btn-block').click();
  await page.waitForTimeout(30000);
  await page.goto('http://127.0.0.1:8000/videos');
  await page.getByText('test.mp4').click();
  await page.getByText('test2.webm').click();
  await page.getByText('test3.mp4').click();
  await page.goto('http://127.0.0.1:8000/login');

  } catch (error) {

    console.error('An error occured:', error);
  }
  finally{
    await browser.close();
  }
  
});